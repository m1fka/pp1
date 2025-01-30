// аватар выводит в файле second-js

export async function getUserProfilePhoto() {

    const token = '7613900220:AAEYOhF_VUB5_L5xdhpsvX8oE-ni0fHGzLY';
    const userId = '852766243'; 



    try {
        const response = await fetch(`https://api.telegram.org/bot${token}/getUserProfilePhotos?user_id=${userId}`);
        const data = await response.json();

        if (data.ok && data.result.total_count > 0) {
            const photo = data.result.photos[0]; // Получаем первую аватарку
            const fileId = photo[photo.length - 1].file_id; // Получаем file_id самого большого размера
            const fileResponse = await fetch(`https://api.telegram.org/bot${token}/getFile?file_id=${fileId}`);
            const fileData = await fileResponse.json();

            if (fileData.ok) {
                const filePath = fileData.result.file_path;
                const avatarUrl = `https://api.telegram.org/file/bot${token}/${filePath}`;
                sessionStorage.setItem('avatarTelegram',avatarUrl);
            }
        } else {
            sessionStorage.setItem('avatarTelegram','style/avatar-notDefined.png');

            console.log('Аватарка не найдена');
        }
    } catch (error) {
        console.error('Ошибка:', error);
    }
}