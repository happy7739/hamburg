<%@ Page Title="用户管理" Language="C#" MasterPageFile="~/user/admin/Site1.Master"
    AutoEventWireup="true" CodeBehind="MLJ_User.aspx.cs" Inherits="Web.user.admin.MLJ_User" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <script type="text/javascript">
        function sumitdelete(id) {
            $("form[pid='myform']").attr('action', "MLJ_User.aspx?id=" + id + "&dongzhuo=删除");
        }
        function sumitupdate(id) {
            $("form[pid='myform']").attr('action', "MLJ_UserInformation.aspx?id=" + id + "&dongzhuo=修改");
        } 
    </script>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <form id="myform" runat="server" method="post" action="" pid="myform">
    <div>
        <ol class="breadcrumb">
            <li class="active"><span class="glyphicon glyphicon-home"></span>&nbsp;用户管理</li>
        </ol>
        <div>
            <div id="insertbutton" class="col-xs-offset-4 ">
                <a href="LSL_UserInformation.aspx?dongzhuo=新增&id=" class="btn btn-sm btn-info" name="insert" ><span class="glyphicon glyphicon-off">
                </span>&nbsp;新增管理员账户</a>
            </div>
            <br />
        </div>
        <div>
            <%=data %>
        </div>
    </div>
    </form>
</asp:Content>
