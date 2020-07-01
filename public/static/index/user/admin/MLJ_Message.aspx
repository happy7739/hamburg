<%@ Page Title="留言管理" Language="C#" MasterPageFile="~/user/admin/Site1.Master"
    AutoEventWireup="true" CodeBehind="MLJ_Message.aspx.cs" Inherits="Web.user.admin.MLJ_Message" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
    <script type="text/javascript">
        function sumitdelete(id) {
            $("form[pid='myform']").attr('action', "MLJ_Message.aspx?id=" + id + "&dongzhuo=删除");
        }
        function sumitupdate(id) {
            $("form[pid='myform']").attr('action', "MLJ_Message.aspx?id=" + id + "&dongzhuo=编辑");
        }
        function sumitsearchshijian() {
            $("form[pid='myform']").attr('action', "MLJ_Message.aspx?dongzhuo=查询&chanxu=shijian");
        }
        function sumitsearchdianhua() {
            $("form[pid='myform']").attr('action', "MLJ_Message.aspx?dongzhuo=查询&chanxu=dianhua");
        }
        function sumitsearchzhuangtai() {
            $("form[pid='myform']").attr('action', "MLJ_Message.aspx?dongzhuo=查询&chanxu=zhuangtai");
        }
    </script>
    <script src="../js/mydate.js" type="text/javascript"></script>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <form id="myform" runat="server" method="post" action="" pid="myform">
    <div>
        <ol class="breadcrumb">
            <li class="active"><span class="glyphicon glyphicon-home"></span>&nbsp;留言管理</li>
        </ol>
        <div>
            <table class="bordered">
                <tr>
                    <td>
                        <font>读取状态：</font><select name="zhuangtai" id="zhuangtai" runat="server" class="form-control"
                            style="max-width: 200px; display: inline-block;">
                            <option value="未读">未读</option>
                            <option value="已读">已读</option>
                        </select>
                        <input type='submit' class='bianji' name='查询' value='查询' onclick="sumitsearchzhuangtai()" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <font>移动电话：</font><input id="dianhua" name="dianhua" type="text" class="form-control"
                            placeholder="电话" runat="server" />
                        <input type='submit' class='bianji' name='查询' value='查询' onclick="sumitsearchdianhua()" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <font>留言日期：</font>开始日期
                        <input type="text" id="starttime" name="starttime" class="form-control" onfocus="MyCalendar.SetDate(this)" runat="server"/>
                        结束日期<input type="text"  id="endtime" name="endtime" class="form-control" onfocus="MyCalendar.SetDate(this)" runat="server"/>
                        <input type='submit' class='bianji' name='查询' value='查询' onclick="sumitsearchshijian()" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <%=data %>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    </form>
</asp:Content>
