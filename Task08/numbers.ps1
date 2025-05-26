function Show-Date_Info {
    $today = Get-Date
    $day = $today.Day
    $month = $today.Month
    $year = $today.Year

    $baseUrl = "http://numbersapi.com"

    $facts = @(
        "$baseUrl/$month/$day/date",
        "$baseUrl/$day",
        "$baseUrl/$year/year"
    )
    Write-Host "Сегодня: $day.$month.$year"
    foreach ($url in $facts) {
        try {
            $response = Invoke-WebRequest -Uri $url -UseBasicParsing
            Write-Host $response.Content -ForegroundColor Blue
        } catch {
            Write-Host "Couldn't get data from $url" -ForegroundColor Red
        }
    }
}

Show-Date_Info