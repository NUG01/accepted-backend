<?php



namespace App\Enums;

use Ramsey\Uuid\Type\Integer;

enum UserRoleEnum: int
{
  case ENTRANT = 1;

  case STUDENT = 2;

  case TEACHER = 3;
}
