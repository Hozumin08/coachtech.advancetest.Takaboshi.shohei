# 入力フォーム
- お客様からの問い合わせ情報を入力・保存するフォーム。
　localhost:8000/formで画像の入力ページが開く。入力内容に誤りがあればエラーメッセージが表示され、問題がなければ確認のページが開く。
  郵便番号はハイフンが入力された状態、メールアドレスはアドレスの形式でなければエラーになる。
![sc1](https://user-images.githubusercontent.com/122454277/236396988-cf6b1a16-0056-47f9-8751-f664580c8bd6.png)


## 作成した目的
・ coachtech advanceテストの課題に合わせて作成。

## 機能一覧
- 問い合わせ内容の入力・確認
- 入力内容のデータベースへの保存
　（管理フォームは実装できていません）
    
## 使用技術
- Laravel 10.1.1

## テーブル設計
![table](https://user-images.githubusercontent.com/122454277/236399457-2dd197b3-1f3f-41d0-809d-8c77ddfbc936.png)

## ER図

![adtest drawio](https://user-images.githubusercontent.com/122454277/236401581-fda811c4-fccf-4b84-9c77-f669195a9d24.png)
