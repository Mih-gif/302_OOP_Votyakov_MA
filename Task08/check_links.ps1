$shell = New-Object -ComObject WScript.Shell
$desktopPath = [Environment]::GetFolderPath("Desktop")
$badLinksPath = Join-Path $desktopPath "BadLinks"

if (-not (Test-Path -Path $badLinksPath)) {
    New-Item -ItemType Directory -Path $badLinksPath | Out-Null
}

Get-ChildItem -Path $desktopPath -Filter *.lnk | ForEach-Object {
    $shortcut = $shell.CreateShortcut($_.FullName)
    $targetPath = $shortcut.TargetPath

    if (-not (Test-Path -Path $targetPath)) {
        Move-Item -Path $_.FullName -Destination $badLinksPath -Force
        Write-Host "Invalid label has been moved: $($_.Name)" -ForegroundColor Yellow
    }
}