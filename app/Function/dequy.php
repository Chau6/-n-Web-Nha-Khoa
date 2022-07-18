<?php
function hello(){
    echo "Hello World";
}

function recursiveOption ($data,$selected,$parent_name = 0,$str = "") { //đệ quy thể loại cha
    foreach ($data as $key => $value) {
        if ($value["parent_name"] == $parent_name) {
            $selected_option = '';
            if ($value["id"] == $selected) {
                $selected_option = "selected";
            }
            echo '<option value="'.$value["id"].'" '.$selected_option.'>'.$str.$value["name"].'</option>';
            unset($data[$key]);
            recursiveOption ($data,$selected,$value["id"],$str."---| ");
        }
    }
}

function recursiveTable ($data,$parent_name = 0,$str = "") { //hiển thị danh sách thể loại
    foreach ($data as $key => $value) {
        if ($value["parent_name"] == $parent_name) {
            echo '
            <tr>
                <td>'.$str.$value["name"].'</td>
                <td><a onClick="return deleteConfirm()" href="http://127.0.0.1:8000/admin/category/delete/'.$value['id'].'">Xóa</a></td>
                <td><a href="http://127.0.0.1:8000/admin/category/edit/'.$value['id'].'">Sửa</a></td>
            </tr>';
            unset($data[$key]);

            recursiveTable ($data,$value["id"],$str."---| ");
        }
    } 
}

function recursiveOptionPro ($data,$selected,$parent_name = 0,$str = "") { //đệ quy thể loại cha
    foreach ($data as $key => $value) {
        if ($value["parent_name"] == $parent_name) {
            $selected_option = '';
            if ($value["id"] == $selected) {
                $selected_option = "selected";
            }
            echo '<option value="'.$value["id"].'" '.$selected_option.'>'.$str.$value["name"].'</option>';
            unset($data[$key]);
            recursiveOptionPro ($data,$selected,$value["id"],$str."---| ");
        }
    }
}


function recursiveTablePro ($data) { //hiển thị danh sách thể loại
    foreach ($data as $key => $value) {
        echo '
        <tr>
            <td>'.$value["id"].'</td>
            <td>'.$value["name"].'</td>
            <td>'.$value["category_id"].'</td>
            <td>'.$value["status"].'</td>
            <td>'.$value["created_at"].'</td>            
            <td><a onClick="return deleteConfirm()" href="http://127.0.0.1:8000/admin/product/delete/'.$value['id'].'">Xóa</a></td>
            <td><a href="http://127.0.0.1:8000/admin/product/edit/'.$value['id'].'">Sửa</a></td>
        </tr>';
        unset($data[$key]);
    } 
}

    function recursiveOptionPostb ($data,$selected,$category_id = 0,$str = "") { //đệ quy thể loại cha
        foreach ($data as $key => $value) {
            if ($value["category_id"] == $category_id) {
                $selected_option = '';
                if ($value["id"] == $selected) {
                    $selected_option = "selected";
                }
                echo '<option value="'.$value["id"].'" '.$selected_option.'>'.$str.$value["name"].'</option>';
                unset($data[$key]);
                recursiveOption ($data,$selected,$value["id"],$str."---| ");
            }
        }
    }

    function recursiveTablePostb ($data,$category_id = 0,$str = "") { //hiển thị danh sách thể loại
        foreach ($data as $key => $value) {
            if ($value["category_id"] == $category_id) {
                echo '
                <tr>
                    <td>'.$str.$value["name"].'</td>
                    <td><a onClick="return deleteConfirm()" href="http://127.0.0.1:8000/admin/product/delete/'.$value['id'].'">Xóa</a></td>
                    <td><a href="http://127.0.0.1:8000/admin/product/edit/'.$value['id'].'">Sửa</a></td>
                </tr>';
                unset($data[$key]);
                recursiveTablePostb ($data,$value["id"],$str."---| ");
            }
        } 
    }
?>