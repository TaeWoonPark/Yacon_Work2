<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Yacon Works ダッシュボード</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: "Noto Sans JP", sans-serif;
            background-color: #f5f7fa;
            margin: 0;
            padding: 0;
            color: #333;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 16px;
            text-align: center;
            font-size: 20px;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            background: white;
            border-radius: 10px;
            padding: 24px 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            border-left: 5px solid #007bff;
            padding-left: 8px;
            margin-bottom: 12px;
            font-size: 18px;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
            margin-bottom: 24px;
        }

        .stat-card {
            background: #f0f4ff;
            padding: 16px;
            border-radius: 10px;
            text-align: center;
        }

        .stat-value {
            font-size: 22px;
            font-weight: bold;
            margin-top: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px 10px;
            text-align: center;
        }

        th {
            background-color: #f2f6fa;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 16px;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 10px;
            font-size: 14px;
        }

        button:hover {
            background-color: #0069d9;
        }

        footer {
            text-align: center;
            color: #888;
            margin-top: 40px;
            font-size: 13px;
        }
    </style>
</head>

<body>
    <header>
        👋 ようこそ、{{ Auth::user()->name }} さん
    </header>

    <div class="container">
        <h2>📊 今月の加工実績</h2>
        <div class="stats">
            <div class="stat-card">
                <div>加工総量</div>
                <div class="stat-value">125.4 kg</div>
            </div>
            <div class="stat-card">
                <div>平均歩留まり</div>
                <div class="stat-value">82.3%</div>
            </div>
            <div class="stat-card">
                <div>作業者人数</div>
                <div class="stat-value">12 名</div>
            </div>
            <div class="stat-card">
                <div>総作業時間</div>
                <div class="stat-value">45.5 時間</div>
            </div>
        </div>

        <h2>📅 最新の作業記録</h2>
        <table>
            <tr>
                <th>日付</th>
                <th>内容</th>
                <th>加工量</th>
                <th>歩留まり</th>
            </tr>
            <tr>
                <td>10/20</td>
                <td>スライス乾燥</td>
                <td>18 kg</td>
                <td>80%</td>
            </tr>
            <tr>
                <td>10/21</td>
                <td>皮むき加工</td>
                <td>22 kg</td>
                <td>84%</td>
            </tr>
            <tr>
                <td>10/22</td>
                <td>真空パック詰</td>
                <td>17 kg</td>
                <td>85%</td>
            </tr>
        </table>

        <div style="text-align:center; margin-top: 20px;">
            <button>作業を追加</button>
            <button>今月のレポートを作成（PDF）</button>
        </div>
    </div>

    <footer>
        Yacon Works（ヤーコンワークス） | 福祉作業所成果共有システム
    </footer>
</body>

</html>
