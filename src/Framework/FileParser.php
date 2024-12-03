<?php

namespace App\Framework;

/**
 *
 * ---
 * source : https://forums.phpfreaks.com/topic/313493-get-class-name-by-filename/
 * ---
 */
class FileParser
{

    private function parseFile(string $filename):array
    {
        $getNext=null;
        $getNextNamespace=false;
        $skipNext=false;
        $isAbstract = false;
        $rs = ['namespace'=>null, 'class'=>[], 'trait'=>[], 'interface'=>[], 'abstract'=>[]];
        foreach (\PhpToken::tokenize(file_get_contents($filename)) as $token) {
            if(!$token->isIgnorable()) {
                $name = $token->getTokenName();
                switch($name){
                    case 'T_NAMESPACE':
                        $getNextNamespace=true;
                        break;
                    case 'T_EXTENDS':
                    case 'T_USE':
                    case 'T_IMPLEMENTS':
                        //case 'T_ATTRIBUTE':
                        $skipNext = true;
                        break;
                    case 'T_ABSTRACT':
                        $isAbstract = true;
                        break;
                    case 'T_CLASS':
                    case 'T_TRAIT':
                    case 'T_INTERFACE':
                        if($skipNext) {
                            $skipNext=false;
                     }
                        else {
                            $getNext = strtolower(substr($name, 2));
                        }
                        break;
                    case 'T_NAME_QUALIFIED':
                    case 'T_STRING':
                        if($getNextNamespace) {
                            if(array_filter($rs)) {
                                throw new \Exception(sprintf('Namespace mus be defined first in %s', $filename));
                            }
                            else {
                                $rs['namespace'] = $token->text;
                            }
                            $getNextNamespace=false;
                        }
                        elseif($skipNext) {
                            $skipNext=false;
                        }
                        elseif($getNext) {
                            if(in_array($token->text,  $rs[$getNext])) {
                                throw new \Exception(sprintf('%s %s has already been found in %s', $rs[$getNext], $token->text, $filename));
                            }
                            if($isAbstract) {
                                $isAbstract=false;
                                $getNext = 'abstract';
                            }
                            $rs[$getNext][]=$token->text;
                            $getNext=null;
                        }
                        break;
                    default:
                        $getNext=null;
                }
            }
        }
        $rs['filename'] = $filename;
        return $rs;
    }
}
