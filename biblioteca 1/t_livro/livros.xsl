<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" indent="yes" />
    
    <xsl:template match="/">
        <html>
            <head>
                <title>Lista de Livros</title>
            </head>
            <body>
                <h1>Lista de Livros</h1>
                <table border="1">
                    <tr>
                        <th>ISBN</th>
                        <th>Título</th>
                        <th>Preço</th>
                        <th>Autores</th>
                        <th>Editora</th>
                        <th>Evento</th>
                    </tr>
                    <xsl:for-each select="Livros/livro">
                        <tr>
                            <td><xsl:value-of select="@ISBN" /></td>
                            <td><xsl:value-of select="titulo" /></td>
                            <td><xsl:value-of select="preco" /></td>
                            <td>
                                <xsl:for-each select="autor">
                                    <p>
                                        <xsl:value-of select="nome" />
                                        <xsl:for-each select="mail">
                                            (<xsl:value-of select="." />)
                                        </xsl:for-each>
                                    </p>
                                </xsl:for-each>
                            </td>
                            <td><xsl:value-of select="editora" /></td>
                            <td>
                                <xsl:choose>
                                    <xsl:when test="evento">
                                        <p><strong>Local:</strong> <xsl:value-of select="evento/local/cidade" />, <xsl:value-of select="evento/local/pais" /></p>
                                        <p><strong>Data:</strong> <xsl:value-of select="evento/dataInicio" /> a <xsl:value-of select="evento/dataTermino" /></p>
                                    </xsl:when>
                                    <xsl:otherwise>
                                        <p>Sem evento</p>
                                    </xsl:otherwise>
                                </xsl:choose>
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
