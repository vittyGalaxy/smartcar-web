package backend;

<%@ page language="java" contentType="text/html; charset=UTF-8" %>


<%
    String forward  = request.getParameter("forward");
    String backward = request.getParameter("backward");
    String right    = request.getParameter("right");
    String left     = request.getParameter("left");
%>

<!DOCTYPE html>
<html>
<head>
    <title>Aserial command</title>
</head>
<body>
    <h2> press: <%= forward %>
    <h2> press: <%= backend %>
    <h2> press: <%= left %>
    <h2> press: <%= right %>
</body>
</html>