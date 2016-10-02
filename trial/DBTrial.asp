<html>
<body>
<%
   Set Conn = Server.CreateObject("ADODB.Connection")
   dbPath = Server.MapPath("/cgi-bin/Brandon_Webpage.mdb")
   Conn.Mode = adModeReadWrite
   Conn.Open "Provider=Microsoft.Jet.OLEDB.4.0; Data Source=" & dbPath
   Set rs = Server.CreateObject("ADODB.Recordset")
   
   Response.write("<TABLE border='1'><TR><TD colspan='6'>DATA</TD><TR>")
   SQLstring = "SELECT * FROM table"
   rs.open SQLstring, Conn
        Do Until rs.eof
            Response.Write("<tr>")
            Response.Write("<td>" & rs("FieldStr") & "</td>")
            Response.Write("<td>" & rs("FieldNum") & "</td>")
            Response.Write("<td>" & rs("FieldLong") & "</td>")
            Response.Write("</tr>" & vbNewLine)
        rs.movenext
        Loop
        Response.write("</TABLE>")
   rs.close
   set rs = Nothing
   set Conn = Nothing
%>
    </body>
    </html>