<?php

namespace App\Entity;

enum Wish: string
{
    case Housing = "HOUSING";
    case Administrative = "ADMINISTRATIVE";
    case Internship = "INTERNSHIP";
    case Conviviality = "CONVIVIALITY";
    case Work = "WORK";
}
