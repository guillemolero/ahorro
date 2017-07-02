/**
 * Created by Portatil on 30/06/2017.
 */

$(document).ready(function()
{
    $('#form-Crear').submit(function()
        {
            var url = "functions/create.php";

            $.ajax(
                {
                    type:"POST",
                    async: true,
                    url: url,
                    data: $('#form-Crear').serialize(),
                    success: function(data)
                    {
                        $("#resultado").html(data);
                    }
                }
            );
            return false;
        }
    )

});