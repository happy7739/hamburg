<%@ Page Title="产品中心" Language="C#" MasterPageFile="~/user/admin/Site1.Master" AutoEventWireup="true" CodeBehind="MLJ_Product.aspx.cs" Inherits="MaiLeJi.user.admin.MLJ_Product" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
 <script type="text/javascript">
     function sumitdelete(id) {
         $("form[pid='myform']").attr('action', "MLJ_Product.aspx?id=" + id + "&dongzhuo=删除");
     }
     function sumitupdate(id) {
         $("form[pid='myform']").attr('action', "MLJ_ProductC.aspx?id=" + id + "&dongzhuo=修改");
     }
     function sumitseracha() {
         $("form[pid='myform']").attr('action', "MLJ_Product.aspx?dongzhuo=查询&leibie="+ $("#cpfenlei").val());
     }
    </script>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
<form id="myform" runat="server" method="post" action="" pid="myform">
    <div>
        <ol class="breadcrumb">
            <li class="active"><span class="glyphicon glyphicon-home"></span>&nbsp;产品管理</li>
        </ol>
        <div>
            <div id="insertbutton" class="col-xs-offset-4 ">
                <a href="MLJ_ProductC.aspx?dongzhuo=新增&id=" class="btn btn-sm btn-info" name="insert" ><span class="glyphicon glyphicon-off">
                </span>&nbsp;新增产品</a>
            </div>
            <div>
            <table class="bordered">
                <tr>
                    <td>
                        <font>产品类别：</font>
                            <select name="cpfenlei" id="cpfenlei" class="form-control" style="max-width: 200px;
                            display: inline-block;">
                            <option value="hb">汉堡类</option>
                            <option value="zj">炸鸡类</option>
                            <option value="sk">烧烤类</option>
                            <option value="tb">铁板类</option>
                            <option value="yp">饮品类</option>
                        </select>
                        <input type='submit' class='bianji' name='查询' value='查询' onclick="sumitseracha()" />
                    </td>
                </tr>
            </table>
        </div>
        </div>
        <div>
            <%=data %>
        </div>
        <div class="fenye">
          <%=pageshuju %>
        </div>
    </div>
    </form>
</asp:Content>
