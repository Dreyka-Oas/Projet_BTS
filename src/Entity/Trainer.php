<?php

namespace App\Entity;

use App\Repository\TrainerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TrainerRepository::class)]
class Trainer extends Users
{

}
