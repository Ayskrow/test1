<?php



function addInfo($data){

    if(is_array($data) != 1){
        print 'Пришли неверные данные';
        return false;
    }

    $name = $data['name'];
    $lastname = $data['lastname'];
    $firstname = $data['firstname'];
    $address = $data['address'];
    $comment = $data['comment'];
    $result_info = "Имя: $name, Фамилия: $lastname, Отчество: $firstname, Город: $address, Отзыв: $comment; \n";
    file_put_contents('data.txt', $result_info, FILE_APPEND);
}




function getInfo(){

    if(is_file('data.txt') == 1){
        $content = file_get_contents('data.txt');
        $data = explode(';', $content);
        return $data;
    }
    return false;
}
