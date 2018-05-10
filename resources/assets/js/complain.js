import $ from 'jquery';
import { Modal } from 'bootstrap';

$(function () {

    $('.modal-show').click(function(){
        myModal.changeTitle($(this).attr('data-title'));
        myModal.changeBody($(this).attr('data-content'));
        myModal.showModal();
    });



});