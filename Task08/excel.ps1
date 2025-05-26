$excel = New-Object -ComObject Excel.Application
$workbook = $excel.Workbooks.Add()
$sheet = $workbook.Sheets.Item(1)
$sheet.Range('B2').Font.Size = 12
$sheet.Range('B2').Font.Italic = $true

$Sheet.Cells.Item(2, 2) = [System.Text.Encoding]::UTF8.GetString([System.Text.Encoding]::Default.GetBytes("Привет от PowerShell"))

$user = $env:USERNAME
$comp = $env:COMPUTERNAME
$filename = "$user`_$comp.xlsx"
$path = Join-Path ([Environment]::GetFolderPath('Desktop')) $filename

$workbook.SaveAs($path)
$excel.Quit()

Write-Host "Excel file saved to: $path"