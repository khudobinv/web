
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script src="https://cdn.tailwindcss.com"></script>
		<title>Задание №3</title>
	</head>
	<body
		class="min-h-screen flex items-center justify-center bg-zinc-100 text-zinc-700"
	>
		<form
			method="post"
			class="bg-stone-50 p-3 border border-zinc-400 rounded-lg w-1/3 flex flex-col gap-2"
		>
			<h1 class="font-semibold text-xl">Форма</h1>
			<div class="flex flex-col gap-1">
				<label for="fullName" class="text-sm">Фамилия, имя и отчество</label>
				<input
					id="fullName"
					name="fullName"
					type="text"
					class="bg-stone-200 rounded-lg px-2 py-1 outline-none border border-transparent focus:border-lime-700 placeholder:text-sm transition-all"
					placeholder="Фамилия, имя и отчество"
				/>
			</div>
			<div class="flex flex-col gap-1">
				<label for="phone" class="text-sm">Номер телефона</label>
				<input
					id="phone"
					name="phone"
					type="tel"
					class="bg-stone-200 rounded-lg px-2 py-1 outline-none border border-transparent focus:border-lime-700 placeholder:text-sm transition-all"
					placeholder="Номер телефона"
				/>
			</div>
			<div class="flex flex-col gap-1">
				<label for="email" class="text-sm">Адрес электронной почты</label>
				<input
					id="email"
					name="email"
					type="email"
					class="bg-stone-200 rounded-lg px-2 py-1 outline-none border border-transparent focus:border-lime-700 placeholder:text-sm transition-all"
					placeholder="Адрес электронной почты"
				/>
			</div>
			<div class="flex flex-col gap-1">
				<label for="email" class="text-sm">Дата рождения</label>
				<input
					id="birthdate"
					name="birthdate"
					type="date"
					class="bg-stone-200 rounded-lg px-2 py-1 outline-none border border-transparent focus:border-lime-700 placeholder:text-sm transition-all"
					placeholder="Адрес электронной почты"
				/>
			</div>
			<div class="flex flex-col gap-1">
				<label for="gender" class="text-sm">Пол</label>
				<div id="gender" class="flex gap-2 items-center">
					<label class="cursor-pointer text-sm">
						<input type="radio" name="gender" value="male" checked />
						Мужской
					</label>
					<label class="cursor-pointer text-sm">
						<input type="radio" name="gender" value="female" />
						Женский
					</label>
				</div>
			</div>
			<div class="flex flex-col gap-1">
				<label for="like_lang" class="text-sm"
					>Любимый язык программирования</label
				>
				<select
					class="bg-stone-200 rounded-lg p-2 text-sm outline-lime-600"
					style="scrollbar-color: #e4e4e7"
					name="like_lang[]"
					id="like_lang"
					multiple
				>
					<option value="Pascal">Pascal</option>
					<option value="C">C</option>
					<option value="C++">C++</option>
					<option value="JavaScript">JavaScript</option>
					<option value="PHP">PHP</option>
					<option value="Python">Python</option>
					<option value="Java">Java</option>
					<option value="Haskel">Haskel</option>
					<option value="Clojure">Clojure</option>
					<option value="Prolog">Prolog</option>
					<option value="Scala">Scala</option>
				</select>
			</div>
			<div class="flex flex-col gap-1">
				<label for="bio" class="text-sm">Биография</label>
				<textarea
					id="bio"
					name="bio"
					type="text"
					class="bg-stone-200 rounded-lg px-2 py-1 outline-none border border-transparent focus:border-lime-700 placeholder:text-sm transition-all"
					placeholder="Биография"
				></textarea>
			</div>
			<div>
				<input type="checkbox" name="agreement" id="agreement" />
				<label for="agreement" class="text-sm cursor-pointer"
					>С контрактом ознакомлен (а)</label
				>
			</div>
			<button type='submit' class='p-2 bg-lime-600 text-white rounded-lg text-sm hover:bg-lime-700 transition-all'>Сохранить</button>
		</form>
	</body>
</html>
