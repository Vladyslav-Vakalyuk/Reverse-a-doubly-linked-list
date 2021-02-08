<?php
function reverse($head) {
$newDLL = new DoublyLinkedList();
        while ($head){
    $newDLL->insertNode($head->data);
    $head = $head->next;
     
    }
    $newDLLDone = new DoublyLinkedList();
    $data = $newDLL->tail;
        while ($data){
    $newDLLDone->insertNode($data->data);
    $data = $data->prev;
    
    }
   
    return $newDLLDone->head;

}   
