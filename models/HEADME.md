# Teste para classe

## ClassCrud
- No index.php
```php
include("config/config.php");
include(DIRREQ."lib/vendor/autoload.php");


$date = date("Y.m.d H:i:s");
use Models\ClassCrud;

//Execute um teste de cada vez
// Teste 1
$crud = new ClassCrud();
$crud->insertDB("users","?,?,?,?,?,?,?,?,?",array(0,'Nome','email@gmail.com','123','11/11/1911', '999.999.999-33',$date,'users','ativo'));
//Atualizar index e olhar BD.

//Teste 2
$crud = new ClassCrud();
$bf = $crud->selectDB("*","users","",array());
$f = $bf->fetch(PDO::FETCH_ASSOC);

echo '<pre>';
print_r($f);
echo '<pre>';
print_r($f['nome']);
echo '</pre>';
exit;
//Atualizar index.

//Teste 3
$crud = new ClassCrud();
$bf = $crud->updateDB("users","nome=?","id=?",array('OutroNome',0));
//Atualizar index e olhar BD.

//Teste 4 
$crud = new ClassCrud();
$bf = $crud->deleteDB("users","id=?",array(0));
//Atualizar index e olhar BD.
