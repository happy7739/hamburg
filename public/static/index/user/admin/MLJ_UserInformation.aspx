<%@ Page Title="用户管理编辑" Language="C#" MasterPageFile="~/user/admin/Site1.Master"
    AutoEventWireup="true" CodeBehind="MLJ_UserInformation.aspx.cs" Inherits="Web.user.admin.MLJ_UserInformation" EnableViewStateMac="false"%>

<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <form runat="server">
    <div>
        <ol class="breadcrumb">
            <li class="active"><span class="glyphicon glyphicon-home"></span>&nbsp;用户管理编辑</li>
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
                        <font>登录名：</font><input name="longname" type="text" id="longname" class="form-control" placeholder="登录名" runat="server"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font>用户名：</font><input name="username" id="username" type="text" class="form-control" placeholder="用户名" runat="server"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <font>&nbsp;&nbsp;&nbsp;密码：</font><input id="password" name="password" type="password" class="form-control"
                            placeholder="密码" runat="server"/>
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
