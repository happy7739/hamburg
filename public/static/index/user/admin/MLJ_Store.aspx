<%@ Page Title="店铺中心" Language="C#" MasterPageFile="~/user/admin/Site1.Master" AutoEventWireup="true" CodeBehind="MLJ_Store.aspx.cs" Inherits="MaiLeJi.user.admin.MLJ_Store" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
 <script type="text/javascript">
     function sumitdelete(id) {
         $("form[pid='myform']").attr('action', "MLJ_Store.aspx?id=" + id + "&dongzhuo=删除");
     }
     function sumitupdate(id) {
         $("form[pid='myform']").attr('action', "MLJ_StoreC.aspx?id=" + id + "&dongzhuo=修改");
     }
     function sumitseracha() {
         $("form[pid='myform']").attr('action', "MLJ_Store.aspx?dongzhuo=查询&leibie=" + $("#cpfenlei").val());
     }
    </script>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
<form id="myform" runat="server" method="post" action="" pid="myform">
    <div>
        <ol class="breadcrumb">
            <li class="active"><span class="glyphicon glyphicon-home"></span>&nbsp;店铺管理</li>
        </ol>
        <div>
            <div id="insertbutton" class="col-xs-offset-4 ">
                <a href="MLJ_StoreC.aspx?dongzhuo=新增&id=" class="btn btn-sm btn-info" name="insert" ><span class="glyphicon glyphicon-off">
                </span>&nbsp;新增店铺</a>
            </div>
            <div>
            <table class="bordered">
                <tr>
                    <td>
                        <font>店铺区域：</font>
                            <select name="cpfenlei" id="cpfenlei" class="form-control" style="max-width: 200px;
                            display: inline-block;">
                            <option value="xn">西南地区</option>
                            <option value="hb">华北地区</option>
                            <option value="hz">华中地区</option>
                            <option value="xb">西北地区</option>
                            <option value="qt">其他地区</option>
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
