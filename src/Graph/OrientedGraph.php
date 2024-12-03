<?php

namespace App\Condorcy\Graph;

class OrientedGraph
{

    /*
     * @var array<string|int> $explored Liste des nœuds du graphe exploré
     */
    private array $explored = [];

    /**
     * Création d'un graphe orienté
     *
     * @param array<string|int, array<string|int>>
     */
    public function __construct(
            private array $graph
    ) { }

    /**
     * Recherche un cycle dans un graphe orienté
     *
     * @return bool
     */
    public function is_cyclic(): bool
    {
        $this->explored = [];

        foreach ($this->$graph as $key => $node) {
            if (! in_array($key, $this->$explored) {
                if ($this->depthSearch($key)) return true;
            }
        }

        return false;
    }

    /**
     * Parcours du graphe en profondeur
     *
     * @param string|int $node Le nœud du graphe en cours d'exploration
     *
     * @return bool
     */
    public function depthSearch(string|int $node): bool 
    {
        $this->explored[] = $node;
        
        foreach ($this->graph[$node] as $image) {
            if (in_array($image, $this->explored)) {
                return true;
            } else if (! in_array($image, $this->explored) {
                if ($this->depthSearch($image, $node)) return true;
            }
        }

        return false;
    }
}
