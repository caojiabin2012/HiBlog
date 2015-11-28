$(function() {
	
	/**
	 * 主题HTML编辑器
	 */
	var theme_editor = ace.edit("theme-content");
	theme_editor.getSession().setMode("ace/mode/html");
	
	var $modal_resource = $("#modal-show-resource");
	
	/**
	 * 绑定主题解锁点击事件
	 */
	$("#theme-unlock").click(function() {
		var href = $CONFIG.path + "aj/manage/theme/unlock";
		var theme_id = $(this).data("id");
		$.post(href, {"id":theme_id}, function(o) {
			$.ajaxCallback(o, location.reload);
		});
	});
	
	/**
	 * 代理显示源代码事件
	 */
	$("#resource-result").delegate("[action-type=show-resource]", "click", function() {
		var $tr = $(this).parents("tr:first");
		var href = $CONFIG.path + "aj/manage/theme/showresource";
		var theme_id = $tr.find("[node-type=id]").html();
		$.get(href, {"id":theme_id}, function(o) {
			$.ajaxCallback(o, function(o) {
				var resource_name = $tr.find("[node-type=resource_name]").html();
				$modal_resource.find("[node-type=title]").html(resource_name);
				try {
					theme_editor.setValue(o.data.content);
					theme_editor.setReadOnly(o.data.readonly);
				} catch(e) {
					console.log(e);
				}
				
				//将相关数据写入模态框
				$modal_resource.data("id", theme_id);
				
				//显示源代码模态框
				$modal_resource.modal({
					"keyboard" : false,
					"backdrop" : 'static'
				});
				
			});
		});
	});
	
	/**
	 * 保存源代码
	 */
	$modal_resource.delegate("[action-type=save]", "click", function() {
		var data = {
			"id" : $modal_resource.data("id"),
			"content" : theme_editor.getValue()
		};
		$.post($CONFIG.path + "aj/manage/theme/save", data, function(o) {
			$.ajaxCallback(o, function(o) {
				$.alert(o.msg);
			});
		});
	});
	
	/**
	 * 显示源代码，关闭模态框
	 */
	$modal_resource.delegate("[action-type=close]", "click", function() {
		$.confirm("确定要关闭吗？", "确认", function(){
			$modal_resource.modal("hide");
		})
	});
	
	
});
