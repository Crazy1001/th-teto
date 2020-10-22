// 網頁畫面載入完成
window.onload = () => {
    // 取得瀏覽器可視區的高度
    const viewHeight = window.innerHeight;

    // 取得#memberBox的高度
    const memberBoxHeight = document.querySelector('#memberBox').offsetHeight;

    // 定義#mainContainer的高度
    document.querySelector('#mainContainer').setAttribute('style', `height:${viewHeight}px`);

    // 判斷使用者滾動螢幕
    window.onresize = () => {
        // 取得新瀏覽器可視區的高度
        const newViewHeight = toScroll();

        // 重新定義#mainContainer的高
        document.querySelector('#mainContainer').setAttribute('style', `height:${newViewHeight}px`);
    };

    const domPlayerInvitedCode = document.querySelector('#playerInvitedCode');

    if (domPlayerInvitedCode !== null) {
        // 使用者點選推廣碼
        domPlayerInvitedCode.addEventListener('click', (event) => {
            console.warn(event.target.innerText);

            // 取德使用者的推廣碼
            const playerInvitedCode = event.target.innerText;

            // 複製推廣碼至剪貼簿
            const getResponse = copyTextToClipboard(playerInvitedCode);

            // 判斷是否複製成功
            if (getResponse === 0) {
                // 判斷複製成功
                // 顯示複製成功提示
                document.querySelector('#copyNotice').classList.add('active');

                // 2秒後隱藏複製成功提示
                setTimeout(() => {
                    document.querySelector('#copyNotice').classList.remove('active');
                }, 1500);
            }
        });
    }

    let memberHeaderContainerHeight = 0;

    const domMemberHeaderContainer = document.querySelector('#memberHeaderContainer');

    if (domMemberHeaderContainer !== null) {
        // 取得
        memberHeaderContainerHeight = domMemberHeaderContainer.offsetHeight;
    }

    const domMailMemberBox = document.querySelector('#memberBox.member-mail-box');

    // 訊息中心頁面處理
    // if (domMailMemberBox !== null) {
    //     domMailMemberBox.setAttribute('style', `height: calc(100% - ${memberHeaderContainerHeight}px);`);
    //     // domMailMemberBox.setAttribute('style', 'height: 600px;');
    // }

    // 關注名單
    // 使用者按下搜尋欄位旁的清除輸入資料按鈕
    const btnSearchClean = document.querySelector('#btnSearchClean');

    if (btnSearchClean !== null) {
        btnSearchClean.addEventListener('click', () => {
            document.querySelector('#txtSearch').value = '';
        });
    }

    // 使用者按下查看更多按鈕
    const arrayBtnAttentionMore = document.querySelectorAll('.attention-list-item .btn-more');

    if (arrayBtnAttentionMore.length !== 0) {
        Array.from(arrayBtnAttentionMore).forEach((btn) => {
            btn.addEventListener('click', () => {
                document.querySelector('#attentionMoreDialog').classList.add('active');
            });
        });

        document.querySelector('#attentionMoreDialog .btn-close').addEventListener('click', () => {
            document.querySelector('#attentionMoreDialog').classList.remove('active');
        });
    }

    // 使用者按下帳戶記錄內的分類
    const arrayMemberRecordTab = document.querySelectorAll('#memberRecordTab .tab-item');

    if (arrayMemberRecordTab.length !== 0) {
        Array.from(arrayMemberRecordTab).forEach((tab) => {
            tab.addEventListener('click', (event) => {
                // 取得使用者選擇的項目
                const useSelect = event.target.dataset.panel;

                const arrayMemberRecordPanel = document.querySelectorAll('#memberRecordPanel .record-panel');

                // 清空所有項目已選擇狀態
                for (let i = 0; i < arrayMemberRecordTab.length; i += 1) {
                    arrayMemberRecordTab[i].classList.remove('active');
                }

                // 使用者選擇的項目加上已選擇狀態
                event.target.classList.add('active');

                // 隱藏所有已選擇面板
                for (let i = 0; i < arrayMemberRecordPanel.length; i += 1) {
                    arrayMemberRecordPanel[i].classList.remove('active');
                }

                // 顯示使用者選擇的面板
                switch (useSelect) {
                    case '1':
                        document.querySelector('#memberRecordPanel .record-panel.panel1').classList.add('active');

                        break;
                    case '2':
                        document.querySelector('#memberRecordPanel .record-panel.panel2').classList.add('active');

                        break;
                    case '3':
                        document.querySelector('#memberRecordPanel .record-panel.panel3').classList.add('active');

                        break;
                    case '4':
                        document.querySelector('#memberRecordPanel .record-panel.panel4').classList.add('active');

                        break;
                    default:
                        document.querySelector('#memberRecordPanel .record-panel.panel1').classList.add('active');
                }
            });
        });
    }
};
