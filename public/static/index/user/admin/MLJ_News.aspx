<%@ Page Title="新闻中心" Language="C#" MasterPageFile="~/user/admin/Site1.Master" AutoEventWireup="true" CodeBehind="MLJ_News.aspx.cs" Inherits="MaiLeJi.user.admin.MLJ_News" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
 <script type="text/javascript">
     function sumitdelete(id) {
         $("form[pid='myform']").attr('action', "MLJ_News.aspx?id=" + id + "&dongzhuo=删除");
     }
     function sumitupdate(id) {
         $("form[pid='myform']").attr('action', "MLJ_NewsC.aspx?id=" + id + "&dongzhuo=修改");
     }
     function sumitseracha() {
         $("form[pid='myform']").attr('action', "MLJ_News.aspx?dongzhuo=查询&leibie=" + $("#cpfenlei").val());
     }
    </script>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
<form id="myform" runat="server" method="post" action="" pid="myform">
    <div>
        <ol class="breadcrumb">
            <li class="active"><span class="glyphicon glyphicon-home"></span>&nbsp;新闻管理</li>
        </ol>
        <div>
            <div id="insertbutton" class="col-xs-offset-4 ">
                <a href="MLJ_NewsC.aspx?dongzhuo=新增&id=" class="btn btn-sm btn-info" name="insert" ><span class="glyphicon glyphicon-off">
                </span>&nbsp;新增新闻</a>
            </div>
            <div>
            <table class="bordered">
                <tr>
                    <td>
                        <font>新闻类别：</font>
                            <select name="cpfenlei" id="cpfenlei" class="form-control" style="max-width: 200px;
                            display: inline-block;">
                            <option value="zx">新闻资讯</option>
                            <option value="jy">店铺经营技巧</option>
                            <option value="cf">财富新闻频道</option>
                            <option value="cy">创业之路</option>
                            <option value="sh">生活小妙招</option>
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
        <div  class="fenye">
          <%=pageshuju %>
        </div>
    </div>
    </form>
</asp:Content>