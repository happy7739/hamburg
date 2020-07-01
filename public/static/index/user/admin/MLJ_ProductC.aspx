<%@ Page Title="产品编辑" Language="C#" MasterPageFile="~/user/admin/Site1.Master" AutoEventWireup="true"
    CodeBehind="MLJ_ProductC.aspx.cs" Inherits="MaiLeJi.user.MLJ_ProductC" validateRequest="false" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <link rel="stylesheet" href="../kindeditor/themes/default/default.css" />
    <link rel="stylesheet" href="../kindeditor/plugins/code/prettify.css" />
    <script type="text/javascript" charset="utf-8" src="../kindeditor/kindeditor.js"></script>
    <script type="text/javascript" charset="utf-8" src="../kindeditor/lang/zh_CN.js"></script>
    <script type="text/javascript" charset="utf-8" src="../kindeditor/plugins/code/prettify.js"></script>
    <script type="text/javascript">
        KindEditor.ready(function (K) {
            var editor = K.editor({
                allowFileManager: true,
                cssPath: '../kindeditor/plugins/code/prettify.css',
                uploadJson: '../kindeditor/asp.net/upload_json.ashx',
                fileManagerJson: '../kindeditor/asp.net/file_manager_json.ashx',
                formatUploadUrl: false
            });
            K('#image1').click(function () {
                editor.loadPlugin('image', function () {
                    editor.plugin.imageDialog({
                        imageUrl: K('#url1').val(),
                        clickFn: function (url, title, width, height, border, align) {
                            K('.hText1css').val(url);
                            K(".Img1css").attr("src", url);
                            editor.hideDialog();
                        }
                    });
                });
            });
        });
    </script>
    <script type="text/javascript">
        KindEditor.ready(function (K) {
            var editor1 = K.create('.Textarea1css', {
                width: '850px',
                height: '500px',
                cssPath: '../kindeditor/plugins/code/prettify.css',
                uploadJson: '../kindeditor/asp.net/upload_json.ashx',
                fileManagerJson: '../kindeditor/asp.net/file_manager_json.ashx',
                allowFileManager: true,
                formatUploadUrl: false,
                afterCreate: function () {
                    var self = this;
                    K.ctrl(document, 13, function () {
                        self.sync();
                        K('form[name=example]')[0].submit();
                    });
                    K.ctrl(self.edit.doc, 13, function () {
                        self.sync();
                        K('form[name=example]')[0].submit();
                    });
                }
            });
            prettyPrint();
        });
    </script>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <form id="Form1" runat="server">
    <div>
        <ol class="breadcrumb">
            <li class="active"><span class="glyphicon glyphicon-home"></span>&nbsp;产品管理编辑</li>
        </ol>
        <div>
            <table class="bordered">
                <tr>
                    <td>
                        <font>&nbsp;&nbsp;&nbsp;编号：</font><input name="id" type="text" class="form-control"
                            placeholder="编号" disabled="disabled" runat="server" id="id" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <font>&nbsp;&nbsp;&nbsp;项目：</font><input id="xiangmu" name="xiangmu" class="form-control"
                            placeholder="项目" runat="server" disabled="disabled" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <font>类别：</font>
                        <select name="cpfenlei" id="cpfenlei" runat="server" class="form-control" style="max-width: 200px;
                            display: inline-block;">
                            <option value="hb">汉堡类</option>
                            <option value="zj">炸鸡类</option>
                            <option value="sk">烧烤类</option>
                            <option value="tb">铁板类</option>
                            <option value="yp">饮品类</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font>标题：</font><input name="biaoti" id="biaoti" type="text" class="form-control"
                            placeholder="标题" runat="server" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <font>&nbsp;&nbsp;&nbsp;关键词：</font><input id="guanjianci" name="guanjianci" type="text"
                            class="form-control" placeholder="关键词" runat="server" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <font>&nbsp;&nbsp;&nbsp;描述：</font><input id="miaoshu" name="miaoshu" type="text"
                            class="form-control" placeholder="描述" runat="server" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <font>&nbsp;&nbsp;&nbsp;热度：</font><input id="redu" name="redu" type="text" class="form-control"
                            placeholder="热度" runat="server" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <font>&nbsp;&nbsp;&nbsp;发布时间：</font><input id="fabushijian" name="fabushijian" type="text"
                            class="form-control" placeholder="发布时间" runat="server" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <font>&nbsp;&nbsp;&nbsp;封面：</font><img class="Img1css" id="Img2" alt="" runat="server"
                            width="200" height="200" src="" />
                        <input class="hText1css" type="hidden" id="hText1" name="hText1" runat="server" />
                        <input class="bianji" type="button" id="image1" value="选择图片" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <font>&nbsp;&nbsp;&nbsp;内容：</font><textarea name="maincontent_Textarea1" id="Textarea1"
                            style="min-height: 500px; min-width: 800px; max-width: 1000px; visibility: hidden;"
                            runat="server" class="Textarea1css"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input name="submit" value="提交" type="submit" class="btn btn-sm btn-info" style="margin-left: 50px;
                            width: 80px;" />
                    </td>
                </tr>
            </table>
        </div>
    </div>
    </form>
</asp:Content>
