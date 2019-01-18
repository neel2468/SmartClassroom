<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<button class="btn btn-info start_chat" style="top:40px;left:20px;position:absolute">Start Chat</button>
    <div id="container" style="position:absolute;background-color:white"></div>
<script>
    var element_pos = 0;    // POSITION OF THE NEWLY CREATED ELEMENTS.
    var iCnt = 0;
    function chatbox()
    {

            var dynamic_div = $(document.createElement('div')).css({
                border: '1px solid #ccc', position: 'absolute', left: element_pos, 
                top: $('#container').height() + 20,
                width: '442px', height: '420px',  margin: '0'         
        
            });
            
            element_pos = element_pos + $('#container').width() + 20;
            $(dynamic_div).append('<div style="height:40px;width:442px;background-color:#0080ff"><p style="color:white;font-size:20px">You have chat with <img src="img/close.png" id="cls" height="20px" width="30px"  style="margin-top:10px;float: right;cursor:pointer"></p></div>');
            $(dynamic_div).append('<div style="height:200px;width:420px;border:1px solid #ccc;overflow-y:scroll;margin:10px"></div>');
            $(dynamic_div).append('<textarea style="width:420px;height:100px;margin-top:10px;margin:10px" class="form-control"></textarea>');
            $(dynamic_div).append('<button type="button" style="float:right;margin-right:15px"  name="send_chat"  class="btn btn-info">Send</button>');
            // APPEND THE NEWLY CREATED DIV TO "divContainer".
            $(dynamic_div).appendTo('#container').draggable();

            iCnt = iCnt + 1;
            $('#cls').click(function(){
            	$(dynamic_div).remove();
            })
    }
    $(document).ready(function() {

        $(function() { $('#container').draggable(); });

        // CREATE MORE DIV, WITH 'ABSOLUTE' POSITIONING.
        $('.start_chat').click(function() {
               
                chatbox();
            
        });
    });
</script>