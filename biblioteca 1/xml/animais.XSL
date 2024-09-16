<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
   xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
<html>
<head>
<title>Informações do Gato</title>
<style>
                   body { font-family: Arial, sans-serif; }
                   table { border-collapse: collapse; width: 50%; margin: 20px auto; }
                   th, td { border: 1px solid #dddddd; text-align: left; padding: 8px; }
                   th { background-color: #f2f2f2; }
</style>
</head>
<body>
<h2>Informações do Gato</h2>
<table>
<tr>
<th>Propriedade</th>
<th>Valor</th>
</tr>
<tr>
<td>Nome</td>
<td><xsl:value-of select="GATO/NOME"/></td>
</tr>
<tr>
<td>Raça</td>
<td><xsl:value-of select="GATO/RAÇA"/></td>
</tr>
<tr>
<td>Idade</td>
<td><xsl:value-of select="GATO/IDADE"/></td>
</tr>
<tr>
<td>Esterilizado</td>
<td><xsl:value-of select="GATO/ESTERILIZADO"/></td>
</tr>
<tr>
<td>Sem Garras</td>
<td><xsl:value-of select="GATO/SEMGARRAS"/></td>
</tr>
<tr>
<td>Licença</td>
<td><xsl:value-of select="GATO/LICENÇA"/></td>
</tr>
<tr>
<td>Dono</td>
<td><xsl:value-of select="GATO/DONO"/></td>
</tr>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>