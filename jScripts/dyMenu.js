/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
var formObject = {
    run: function(obj) {
        obj.nextAll('.update').html('<option value="">----</option>');
        var projid = obj.attr('projid');
        var name = obj.val();
        jQuery.getJSON('../controllers/update.php', {projid: projid, projname: name},
        function(data) {
            if (!data.error) {
                obj.next('select').html(data.list).removeAttr('disabled');
            }
            else {
                obj.nextAll('.update').html('<option value="">----</option>');
            }
        });
    }
};
$(function() {
    $('.update').live('change', function() {
        formObject.run($this);
    });
});

