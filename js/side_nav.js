function GenerateContentList()
{
  var mainContent = $('#side_nav');
  console.log(mainContent);
  var h1_list = $('#aup h1');　　//如果你的章节标题不是h1,只需要将这里的h1换掉即可
  var h2_list = $('#aup h2');
  var h2_list = $('#aup h3');
 if(mainContent.length < 1)
  return;
  
 if(h1_list.length > 0)
 {
  var content = '';
  content += '';
  for(var i=0; i < h1_list.length; i++)
  {
   var go_to_top = '<a id="_label' + i + '"></a>';
   $(h1_list[i]).before(go_to_top);

/*   var h2_list = $(h1_list[i]).parent().parent().find("h2");*/
   var li2_content = '';
   for(var j = 0; j < h2_list.length; j++)
   {
    var tmp = $(h3_list[j]).prevAll('h2').first();
    if(!tmp.is(h2_list[i]))
    break;
    var li2_anchor = '<a id="_label' + i + '_' + j + '"></a>';
    $(h2_list[j]).before(li2_anchor);
    li2_content += '<a class="toc-link" href="#_label' + i + '_' + j + '"><span class="toc-text">' + $(h2_list[j]).text() + '</span></a></li>';
   }
    
   var li1_content = '';
   if(li2_content.length > 0)
    li1_content = '<a class="toc-link" href="#_label' + i + '"><span class="toc-text">' + $(h1_list[i]).text() + '</span></a>' + li2_content;
   else
    li1_content = '<a  class="toc-link" href="#_label' + i + '"><span class="toc-text">' + $(h1_list[i]).text() + '</span></a>';
   content += li1_content;
  }
  if($('#side_nav').length != 0 )
    {
     $($('#side_nav')[0]).prepend(content);
    }
   } else{
      console.log("当前没有h1,h2标签可进行定位");
    }
  }
 GenerateContentList();