

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <h1>TUDO SOBRE ARRAY EM PHP</h1>
    <h2>Array Simples</h2>

    <?php
        $array = array('1','2','3','4');
        print_r($array);        
    ?>

    <hr>

    <h2>Adicionando um novo item no array</h2>

    <?php
        // Append an item (note that the new key is 5, instead of 0).
        $array[] = 6;
        print_r($array);
    ?>

    <hr>

    <h2>Alterar um item no array</h2>

    <?php
        // update item.
        $array[0] = 10;
        print_r($array);
    ?>

    <hr>

    <h2>Remover um item no array</h2>

    <?php
        // update item.
        unset($array[0]); 
        print_r($array);
    ?>

    <hr>

    <h2>Deletar todos os Itens do Array</h2>
    <?php
        // Now delete every item, but leave the array itself intact:
        foreach ($array as $i => $value) {
            unset($array[$i]);
        }
        print_r($array);
    ?>

    <hr>

    <h2>Array Simples Outra forma</h2>

    <?php
        // Using the short array syntax
        $array = [
            "0" => "zero",
            "1" => "one",
            "2" => "two",
        ];

        print_r($array);
    ?>

    <hr>

    <h2>Array Exemplo de conversão de tipo e substituição</h2>

    <?php
        $array = array(
            1    => "a",
            "1"  => "b",
            1.5  => "c",
            true => "d",
        );
        var_dump($array);
    ?>

    <hr>

    <h2>Alterando valor do indice no Array</h2>

    <?php
        $array = array(
                "a",
                "b",
            6 => "c",
                "d",
        );
        var_dump($array);
    ?>

    <hr>

    <h2>Alterando valor do indice no Array</h2>

    <?php
        $array = array(
            "foo" => "bar",
            "bar" => "foo",
            100   => -100,
            -100  => 100,
        );
        var_dump($array);
    ?>

    <hr>

    <h2>Exemplo de conversão e substituição de tipo complexo</h2>

    <?php
        $array = array(
            1    => 'a',
            '1'  => 'b', // the value "a" will be overwritten by "b"
            1.5  => 'c', // the value "b" will be overwritten by "c"
            -1 => 'd',
            '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
            '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
            true => 'g', // the value "c" will be overwritten by "g"
            false => 'h',
            '' => 'i',
            null => 'j', // the value "i" will be overwritten by "j"
            'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
            2 => 'l', // the value "k" will be overwritten by "l"
        );

        var_dump($array);
    ?>

    <hr>

    <h2>Acessando elementos de array</h2>

    <?php
        
        $array = array(
            "foo" => "bar",
            42    => 24,
            "multi" => array(
                 "dimensional" => array(
                     "array" => "foo"
                 )
            )
        );
        
        var_dump($array["foo"]);
        var_dump($array[42]);
        var_dump($array["multi"]["dimensional"]["array"]);
        
    ?>

    <hr>

    <h2>Acessando Array através da função</h2>

    <?php
        function getArray() {
            return array(1, 2, 3);
        }

        echo $secondElement = getArray()[1];
    ?>

    <hr>

    <h2>Outras informações sobre arrays</h2>

    <?php
        $arr = array(5 => 1, 12 => 2);

        $arr[] = 56;    // This is the same as $arr[13] = 56;
                        // at this point of the script
        
        $arr["x"] = 42; // This adds a new element to
                        // the array with key "x"

        var_dump($arr);
                        
        unset($arr[5]); // This removes the element from the array
        
        unset($arr);    // This deletes the whole array

    ?>

    <br>

    <?php
        // Create a simple array.
        $array = array(1, 2, 3, 4, 5);
        //print_r($array);

        // Now delete every item, but leave the array itself intact:
        foreach ($array as $i => $value) {
            unset($array[$i]);
        }
        //print_r($array);

        // Append an item (note that the new key is 5, instead of 0).
        $array[] = 6;
        //print_r($array);

        // Re-index:
        $array = array_values($array);
        $array[] = 7;
        //print_r($array);
    ?>

    <br><br>

    <?php
        $source_array = [
            [1, 'John'],
            [2, 'Jane'],
        ];
        
        foreach ($source_array as [$id, $name]) {
            // logic here with $id and $name
            echo "Array[$id] = $name";
        }
    ?>


    
</body>
</html>
