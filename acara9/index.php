<?php
class person {
protected $name;
function set_name($new_name) {
$this->name = $new_name;
}
 function get_name() {
return $this->name;
}
}
?>
<?php
$person1 = new Person();
// set value dari properti name
$person1->set_name('Lukman Hakim');
// akses value dari properti name
echo $person1->get_name();
// properti tidak bisa di akses secara langsung, kana muncul error
echo "Hai ".$person1->name='Taufiq Rizaldi';
echo "<hr>";
?>