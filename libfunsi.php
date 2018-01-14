<?php
  function kelulusan($_nilai)
  {
    if ($_nilai <= 55) {
      return 'tidak lulus';
    }else {
      return 'lulus';
    }
  }

  function grade($_grade)
  {
    if ($_grade <= 100 && $_grade >=85) {
      return 'A';
    }elseif ($_grade <= 85 && $_grade >=70) {
      return 'B';
    }elseif ($_grade <= 69 && $_grade >= 56) {
      return 'C';
    }elseif ($_grade <= 55 && $_grade >=36) {
      return 'D';
    }elseif ($_grade <= 35 && $_grade >=0) {
      return 'E';
    }else {
      return 'Z';
    }
  }

  function predikat($_predikat)
  {
    switch ($_predikat) {
      case E:

          return 'sangat kurang';

        break;
      case D:

          return 'sangat kurang';

        break;
      case C:

          return 'cukup';

        break;
      case B:

          return 'baik';

        break;
      case A:

          return 'sangat baik';

        break;
      default:
        # code...
        break;
    }
  }
?>
