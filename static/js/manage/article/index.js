(function($){$.extend({"ajaxCallback":function(rv,success_cb,fail_cb){var auto_alert_error=true;try{var data=$.parseJSON(rv);if(data.code!=100000){if(typeof fail_cb!=="undefined"){auto_alert_error=fail_cb(data);}
if(auto_alert_error){$.alert(data.msg);}}else{if(typeof success_cb!=="undefined"){success_cb(data);}else{$.alert("操作成功",false,function(){location.reload();});}}}catch(e){console.log(e);$.alert(rv);}},"ajaxCallbackDefault":function(response){$.ajaxCallback(response,function(){location.reload();});}});$.fn.extend({"ajaxSubmit":function(success_cb,fail_cb){var form_jq=$(this);form_jq.submit(function(){var method=form_jq.attr("method");var action=form_jq.attr("action");var data=form_jq.serialize();if(!data){$.alert("提交内容为空");}else{$.ajax(action,{"cache":false,"data":data,"type":method,"success":function(o){$.ajaxCallback(o,success_cb,fail_cb);}});}});},"selectAll":function(select_control,child_nodes){var box=$(this);var child_obj=box.find(":checkbox").filter(child_nodes);var control_obj=box.find(select_control);box.delegate(select_control,"click",function(){child_obj.prop("checked",$(this).prop("checked"));});box.delegate(child_nodes,"click",function(){var child_all_size=box.find(child_nodes).size();var child_checked_size=$(child_nodes).filter(":checked").size();if(child_all_size===child_checked_size){control_obj.prop("checked",true);}else{control_obj.prop("checked",false);}});}});})(jQuery);;(function($){$.fn.extend({"pager":function(){var $pager_box=$(this);var next_since_id=$pager_box.attr("next-since-id");var prev_since_id=$pager_box.attr("prev-since-id");var base_href=decodeURIComponent($pager_box.attr("base-href"));var last_page=$pager_box.attr("last-page");var pagerGo=function(number){var query_data={"next_since_id":next_since_id,"prev_since_id":prev_since_id,"last_page":last_page,"p":number};var href=base_href;href+=(href?"&":"?")+$.param(query_data);location.href=href;};$pager_box.delegate("[action-type=pager-go]","click",function(){pagerGo($(this).attr("number"));});$pager_box.find("[name=pager-selector]").change(function(){pagerGo($(this).val());});},});})(jQuery);$(function(){$("[node-type=pager]").pager();});;$(function(){var $form_result=$("#form-manage-category-result");$form_result.delegate("[action-type=publish]","click",function(){var $tr=$(this).parents("tr:first");var href=$CONFIG.path+"aj/manage/publish/article";$.post(href,{"id":$tr.data("id")},$.ajaxCallbackDefault);}).delegate("[action-type=delete]","click",function(){var href=$CONFIG.path+"aj/manage/article/destroy";var article_id=$(this).parents("tr:first").data("id");$.confirm("确定要删除吗? (ID:"+article_id+")","确认",function(){$.post(href,{"id":article_id},$.ajaxCallbackDefault);});});});