var $={
    ajax:function(obj){

        var xhr = new XMLHttpRequest();
        
        // 如果是get提交
        if(obj.type.toLocaleLowerCase()=="get"){

            obj.url = obj.url+"?"+obj.data;
            obj.data = null;
        }
        xhr.open(obj.type,obj.url);
        
        // 如果是post提交有一个特殊请求头
        if(obj.type.toLocaleLowerCase()=="post"){

            xhr.setRequestHeader("Content-Type","application/x-www-form-encoded");
        }

        xhr.send(obj.data);

        xhr.onreadystatechange=function(){

            if(xhr.readyState==4 && xhr.status){
                
                var data = xhr.responseText;
                // 返回数据
                obj.success(data);
            }
        }
    }
}