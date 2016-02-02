class DB
{
    
    static private $pdo;
    
    
    private function __construct()
    {
        
    }
    
    public function __clone()
    {
        throw new Exception('You may not clone the DB instance');
    }
}

if (!isset($_REQUEST['term']))
{
    die('([])');
}

$st = DB::singleton()
        ->prepare(
            'select code, county, facilityname ' .
            'from facility ' .
            'where code like :facilitycode ' .
            'order by code asc ' .
            'limit 0,10');

$searchCode = $_REQUEST['term'] . '%';
$st->bindParam(':facilitycode', $searchCode, PDO::PARAM_STR);

$data = array();
if ($st->execute())
{
    while ($row = $st->fetch(PDO::FETCH_OBJ))
    {
        $data[] = array(
            'value' => $row->code ,
            'county' => $row->county ,
            'facilityname' => $row->facilityname
        );
    }
}
echo json_encode($data);
flush();
