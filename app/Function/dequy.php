<?php
function hello(){
    echo "Hello World";
}

function recursiveOptionCate ($data,$selected,$parent_name = 0,$str = "") { //đệ quy thể loại cha
    foreach ($data as $key => $value) {
        if ($value["parent_name"] == $parent_name) {
            $selected_option = '';
            if ($value["id"] == $selected) {
                $selected_option = "selected";
            }
            echo '<option value="'.$value["id"].'" '.$selected_option.'>'.$str.$value["name"].'</option>';
            unset($data[$key]);
            recursiveOptionCate ($data,$selected,$value["id"],$str."---| ");
        }
    }
}

function recursiveTableCate ($data,$parent_name = 0,$str = "") { //hiển thị danh sách thể loại
    foreach ($data as $key => $value) {
        if ($value["parent_name"] == $parent_name) {
            echo '
            <tr>
                <td>'.$str.$value["name"].'</td>
                <td><a onClick="return deleteConfirm()" href="http://127.0.0.1:8000/admin/category/delete/'.$value['id'].'">Xóa</a></td>
                <td><a href="http://127.0.0.1:8000/admin/category/edit/'.$value['id'].'">Sửa</a></td>
            </tr>';
            unset($data[$key]);

            recursiveTableCate ($data,$value["id"],$str."---| ");
        }
    } 
}

function recursiveOptionPost ($data,$selected,$parent_name = 0,$str = "") { //đệ quy thể loại cha
    foreach ($data as $key => $value) {
        if ($value["parent_name"] == $parent_name) {
            $selected_option = '';
            if ($value["id"] == $selected) {
                $selected_option = "selected";
            }
            echo '<option value="'.$value["id"].'" '.$selected_option.'>'.$str.$value["name"].'</option>';
            unset($data[$key]);
            recursiveOptionPost ($data,$selected,$value["id"],$str."---| ");
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

function recursiveOptionPostb ($data,$selected,$category_id = 0,$str = "") { //đệ quy thể loại cha
    foreach ($data as $key => $value) {
        if ($value["category_id"] == $category_id) {
            $selected_option = '';
            if ($value["id"] == $selected) {
                $selected_option = "selected";
            }
            echo '<option value="'.$value["id"].'" '.$selected_option.'>'.$str.$value["name"].'</option>';
            unset($data[$key]);
            recursiveOptionPostb ($data,$selected,$value["id"],$str."---| ");
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