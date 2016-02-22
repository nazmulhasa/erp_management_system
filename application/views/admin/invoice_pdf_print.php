<table>
<tr>
<td><input type="submit"  value="Print"

onclick="printPDF('D:/asb.Pdf')" /></td>
</tr></table>
<script>
function printPDF(htmlPage)
{
    var w = window.open("about:blank");
    w.document.write(htmlPage);
    if (navigator.appName == 'Microsoft Internet Explorer') window.print();
    else w.print();
}
</script>