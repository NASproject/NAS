$(document).ready(function(){
    $('#sds').dropdown();
    $("#selects li").click(function(){
        var placeholders = new Array(4)
        placeholders[0] = "請輸入關鍵字"
        placeholders[1] = "請輸入指導教授"
        placeholders[2] = "請輸入專題名稱"
        $selec = $(this).find("a").attr("se");
        $("#appendedDropdownButton").attr("placeholder",placeholders[$selec-1]);
        $("#appendedDropdownButton").attr("se",$selec);
      
    });
    $("#appendedDropdownButton").next().next().click(function(){
        select();
    });
});
function select()
{
   
    if($("#appendedDropdownButton").attr("placeholder") == "請輸入關鍵字")
    {
        
        var request = $.ajax({
            url: "Controls/query.php",
            type: "POST",
            data: {
                action:"keyword",
                k_value:$("#appendedDropdownButton").val()
            },
            dataType: "html"
        });
        request.done(function(data) {
            if(data.length == 0)alert("無資料");
            else
            {
                data = jQuery.parseJSON(data);
                $("#result tr.qu").remove();
                for($i = 0; $i< data.length;$i++)
                {
                    data2 = jQuery.parseJSON(data[$i]);
                    for($j = 0; $j< data2.length;$j++)
                    {
                        $tr = "<tr class= 'qu' >";
                        $td1 = "<td><a href = '/nas_directory/"+data2[$j].p_leader_number+"' >"+data2[$j].p_name+"</a></td>";
                        $td2 = "<td>"+data2[$j].p_adviser+"</td>";
                        $td3 = "<td>"+data2[$j].p_type+"</td>";
                        $td4 = "<td>"+data2[$j].p_description+"</td>";
                        $td5 = "<td>"+data2[$j].p_leader_name+"</td>";
                        $td6 = "<td>"+data2[$j].p_leader_number+"</td>";
                        $td7 = "<td>"+data2[$j].p_date+"</td>";
                        $tr += $td1+$td2+$td3+$td4+$td5+$td6+$td7+"</tr>";
                  
                        $("#result").append($tr);
                    }
                }
            }
        });
        request.fail(function(jqXHR, textStatus) {
            alert( "ajax2 : " + textStatus );
        });
               
    }
    else if($("#appendedDropdownButton").attr("placeholder") == "請輸入指導教授")
    {
        var request = $.ajax({
            url: "Controls/query.php",
            type: "POST",
            data: {
                action:"teacher",
                p_adviser:$("#appendedDropdownButton").val()
            },
            dataType: "html"
        });
        request.done(function(data) {
            if(data == 0)alert("無資料");
            else{
           
                $("#result tr.qu").remove();
                data = eval(data);
                for($i = 0; $i< data.length;$i++)
                {
                    $tr = "<tr class= 'qu'>";
                    $td1 = "<td><a href = '/nas_directory/"+data[$i].p_leader_number+"' >"+data[$i].p_name+"</a></td>";
                    $td2 = "<td>"+data[$i].p_adviser+"</td>";
                    $td3 = "<td>"+data[$i].p_type+"</td>";
                    $td4 = "<td>"+data[$i].p_description+"</td>";
                    $td5 = "<td>"+data[$i].p_leader_name+"</td>";
                    $td6 = "<td>"+data[$i].p_leader_number+"</td>";
                    $td7 = "<td>"+data[$i].p_date+"</td>";
                    $tr += $td1+$td2+$td3+$td4+$td5+$td6+$td7+"</tr>";
                    $("#result").append($tr);
                }
            }    
        });
        request.fail(function(jqXHR, textStatus) {
            alert( "ajax2 : " + textStatus );
        });
                
    }
    else if($("#appendedDropdownButton").attr("placeholder") == "請輸入專題名稱")
    {
        var request = $.ajax({
            url: "Controls/query.php",
            type: "POST",
            data: {
                action:"project",
                p_name:$("#appendedDropdownButton").val()
            },
            dataType: "html"
        });
        request.done(function(data) {
            if(data == 0)alert("無資料");
            else{
                $("#result tr.qu").remove();
                data = eval(data);       
                for($i = 0; $i< data.length;$i++)
                {
                    $tr = "<tr class= 'qu'>";
                    $td1 = "<td><a href = '/nas_directory/"+data[$i].p_leader_number+"' >"+data[$i].p_name+"</a></td>";
                    $td2 = "<td>"+data[$i].p_adviser+"</td>";
                    $td3 = "<td>"+data[$i].p_type+"</td>";
                    $td4 = "<td>"+data[$i].p_description+"</td>";
                    $td5 = "<td>"+data[$i].p_leader_name+"</td>";
                    $td6 = "<td>"+data[$i].p_leader_number+"</td>";
                    $td7 = "<td>"+data[$i].p_date+"</td>";
                    $tr += $td1+$td2+$td3+$td4+$td5+$td6+$td7+"</tr>";
                    $("#result").append($tr);
                }
            }    
        });
        request.fail(function(jqXHR, textStatus) {
            alert( "ajax2 : " + textStatus );
        });
                
    }
}
