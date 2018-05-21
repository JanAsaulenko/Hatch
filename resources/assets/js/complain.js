import $ from 'jquery';
import { Modal } from 'bootstrap';



$('#myModal').on('show.bs.modal', function (event) {
    // получить кнопку, которая его открыло
    var button = $(event.relatedTarget);
    // извлечь информацию из атрибута data-content
    var content = button.data('content');
    var title = button.data('title');


    // вывести эту информацию в элемент, имеющий id="content"
    $('#content').append(content);

    $('#title').text(title);


})

$('#myModal').on('hidden.bs.modal', function (event) {

   $('#content').html('');
})












