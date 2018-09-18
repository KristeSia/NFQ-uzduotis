<?php


define( 'HOST', 'localhost' );
define( 'MYSQL_VARTOTOJAS', 'root' );
define( 'MYSQL_SLAPTAZODIS', 'root' );
define( 'DB_VARDAS', 'zylesdebesy' );


 $connection = mysqli_connect( HOST, MYSQL_VARTOTOJAS, MYSQL_SLAPTAZODIS, DB_VARDAS);

// prisijungimas prie bazes
 function getPrisijungimas() {
     global $connection;
     if ($connection) {
         return $connection;
     } else {
          echo "EROROR  nepavyko prisijungti pr. DB <br>" . mysqli_connect_error();
     }
 }
getPrisijungimas();


// atsirenkame rings
function getRings() {

    $results_per_page = 8;

    $mano_sql = "SELECT * FROM items
                          WHERE category='rings';
                ";

    $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);

    $number_of_results = mysqli_num_rows($rezultatai);

    $number_of_pages = ceil($number_of_results/$results_per_page);
// 2 puslapiai

    if (!isset($_GET['page'])) {
      $page = 1;
    } else {
      $page = $_GET['page'];
    }

    $this_page_first_result = ($page-1)*$results_per_page;

    $mano_sql = "SELECT * FROM items
                          WHERE category='rings'
                          LIMIT "
                          . $this_page_first_result .','. $results_per_page;

    $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);

    if (mysqli_num_rows($rezultatai)  > 0) {
    $rezArray = [];
      while ($r = mysqli_fetch_assoc($rezultatai)) {
        array_push($rezArray, $r);
        }
        return $rezArray;
      }
      else {
          echo "ERROR: rings nerasta <br />";
      }
  }

// atsirenkam bracelets
function getBracelets() {

    $results_per_page = 8;

    $mano_sql = "SELECT * FROM items
                          WHERE category='bracelets';
                ";

    $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);

    $number_of_results = mysqli_num_rows($rezultatai);

    $number_of_pages = ceil($number_of_results/$results_per_page);
// 4 puslapiai

    if (!isset($_GET['page'])) {
      $page = 1;
    } else {
      $page = $_GET['page'];
    }

    $this_page_first_result = ($page-1)*$results_per_page;

    $mano_sql = "SELECT * FROM items
                          WHERE category='bracelets'
                          LIMIT "
                          . $this_page_first_result .','. $results_per_page;

    $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);

    if (mysqli_num_rows($rezultatai)  > 0) {
    $rezArray = [];
      while ($r = mysqli_fetch_assoc($rezultatai)) {
        array_push($rezArray, $r);
        }
        return $rezArray;
      }
      else {
          echo "ERROR: bracelets nerasta <br />";
      }
}


// atsirenkam keychains
function getKeychains() {
    $mano_sql = "SELECT * FROM items
                          WHERE category='keychains';
                ";
    $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);
    if (mysqli_num_rows($rezultatai)  > 0) {
        $rezArray = [];
          while ($r = mysqli_fetch_assoc($rezultatai)) {
            array_push($rezArray, $r);
          }
          return $rezArray;
        }  else {
            echo "ERROR: keychains nerasta <br />";
        }
    }

// atsirenkam earings
function getEarings() {
    $mano_sql = "SELECT * FROM items
                          WHERE category='earings';
                ";
    $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);

    if (mysqli_num_rows($rezultatai)  > 0) {
        $rezArray = [];
          while ($r = mysqli_fetch_assoc($rezultatai)) {
            array_push($rezArray, $r);
          }
          return $rezArray;
        }  else {
            echo "ERROR: earings nerasta <br />";
        }
    }


// paimame preke pagal id
    function getPreke( $nr ) {
        $mano_sql = "SELECT * FROM items
                              WHERE Id='$nr';
                    ";
        $rezultatai = mysqli_query(  getPrisijungimas()  , $mano_sql);
        if (mysqli_num_rows($rezultatai)  > 0) {
            $rezultatai = mysqli_fetch_assoc($rezultatai);
             return $rezultatai;
        }  else {
            echo "ERROR: prekes $nr nera <br />";
        }
    }


// sukuriame nauja uzsakyma
function createNewProduct($vardasPart, $pastasPasrt, $kiekis) {

$vardasPart = htmlspecialchars($vardasPart, ENT_QUOTES, 'UTF-8');
$pastasPasrt = htmlspecialchars($pastasPasrt, ENT_QUOTES, 'UTF-8');
$kiekis = htmlspecialchars($kiekis, ENT_QUOTES, 'UTF-8');

  $manoSQL = "INSERT INTO partneriai
                      VALUES ('', '$vardasPart', '$pastasPasrt', '$kiekis');
              ";
  $x = mysqli_query(getPrisijungimas(), $manoSQL);
  if ($x) {
  }
  else {
    echo "NEPAVYKO ikelti!!!";
  }
}

// paimame visus uzsakymus
function getPartners() {
    $mano_sql = "SELECT * FROM partneriai";

    $rezultatai = mysqli_query(getPrisijungimas()  , $mano_sql);

    if (mysqli_num_rows($rezultatai)  > 0) {
        $rezArray = [];
          while ($r = mysqli_fetch_assoc($rezultatai)) {
            array_push($rezArray, $r);
          }
          return $rezArray;
        }  else {
            echo "ERROR: no purchases yet.. <br />";
        }
    }



// PAIESKA in Purchase List
function output() {
  if(isset($_POST['search'])) {
    $searchq = $_POST['search'];

    $query = mysqli_query(getPrisijungimas() , "SELECT * FROM partneriai WHERE name LIKE '%$searchq%' OR email LIKE '%$searchq%'") or die("could not search!");

    if (mysqli_num_rows($query)  > 0) {
    $rezArray = [];
      while ($r = mysqli_fetch_assoc($query)) {
        array_push($rezArray, $r);
      }
      return $rezArray;
    }  else {
        echo "ERROR: uzsakymu nerasta <br />";
    }
  }
}

// rikiavimas A-Z by name
function getPartnersOrderA() {
    $mano_sql = "SELECT * FROM partneriai ORDER BY name ASC";

    $rezultatai = mysqli_query(getPrisijungimas()  , $mano_sql);

    if (mysqli_num_rows($rezultatai)  > 0) {
        $rezArray = [];
          while ($r = mysqli_fetch_assoc($rezultatai)) {
            array_push($rezArray, $r);
          }
          return $rezArray;
        }  else {
            echo "ERROR: no purchases yet.. <br />";
        }
    }


// rikiavimas Z-A by name
function getPartnersOrderD() {
    $mano_sql = "SELECT * FROM partneriai ORDER BY name DESC";

    $rezultatai = mysqli_query(getPrisijungimas()  , $mano_sql);

    if (mysqli_num_rows($rezultatai)  > 0) {
        $rezArray = [];
          while ($r = mysqli_fetch_assoc($rezultatai)) {
            array_push($rezArray, $r);
          }
          return $rezArray;
        }  else {
            echo "ERROR: no purchases yet.. <br />";
        }
    }
