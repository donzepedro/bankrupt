function delete_manager(){
    let confirmation = confirm('you are realy want to delete this record');
    if(!confirmation){
        document.getElementById("delete_manager").setAttribute("href","http://bankrupt/arbitr-manager/index?pg=5");
    }
}
    


/* 
 * 
 * <?='/arbitr-manager/delete-manager?id=' . $eachmanager->id?>
 * 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


