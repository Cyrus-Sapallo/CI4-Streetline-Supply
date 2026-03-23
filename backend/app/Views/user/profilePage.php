<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Profile - Streetline Supply</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #000;
            color: #fff;
        }

        .text-vermillion {
            color: #D64045;
        }

        .bg-vermillion {
            background-color: #D64045;
        }

        .border-vermillion {
            border-color: #D64045;
        }

        .font-bebas {
            font-family: 'Bebas Neue', cursive;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body class="bg-black">

    <!-- HEADER -->
    <?= view('components/header', [
        'brandTitle' => 'Streetline Supply',
        'brandTagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
        'nav' => [
            ['label' => 'Home', 'href' => base_url('/')],
            ['label' => 'Shop', 'href' => base_url('shop')],
            ['label' => 'Moodboard', 'href' => base_url('moodboard')],
            ['label' => 'Roadmap', 'href' => base_url('roadmap')],
        ],
        'cta' => ['label' => 'Shop Now', 'href' => base_url('shop')],
    ]) ?>

    <main class="space-y-16 mx-auto px-6 py-12 max-w-5xl">

        <!-- PROFILE HEADER -->
        <section class="flex items-center gap-6 pb-6 border-vermillion border-b">
            <img
                src="<?= $user->profile_image ? base_url('uploads/' . $user->profile_image) : base_url('images/logo.png') ?>"
                class="border-2 border-vermillion rounded-full w-24 h-24 object-cover">
            <div>
                <h1 class="font-bebas text-vermillion text-4xl">
                    <?= esc($user->first_name . ' ' . $user->last_name) ?>
                </h1>
                <p class="text-gray-400"><?= esc($user->email) ?></p>
                <p class="mt-1 text-gray-500 text-sm uppercase"><?= esc($user->type) ?></p>
            </div>
        </section>

        <!-- EDIT PROFILE BUTTON -->
        <section>
            <h2 class="flex justify-between items-center mb-4 font-extrabold text-vermillion text-2xl">
                Profile Details
                <button id="editBtn" class="bg-vermillion px-3 py-1 rounded text-white text-sm">Edit Profile</button>
            </h2>

            <!-- EDIT FORM + PROFILE PICTURE UPLOAD (HIDDEN BY DEFAULT) -->
            <div id="editSection" class="hidden space-y-6">

                <!-- Edit Details Form -->
                <form id="profileForm" method="post" action="/update-profile" class="space-y-4">
                    <?= csrf_field() ?>
                    <input
                        type="text"
                        name="first_name"
                        value="<?= esc($user->first_name) ?>"
                        class="p-2 rounded w-full text-black"
                        placeholder="First Name">
                    <input
                        type="text"
                        name="last_name"
                        value="<?= esc($user->last_name) ?>"
                        class="p-2 rounded w-full text-black"
                        placeholder="Last Name">
                    <div class="flex gap-4">
                        <button type="submit" class="bg-vermillion px-4 py-2 rounded font-bold">Save Changes</button>
                        <button type="button" id="cancelBtn" class="bg-gray-700 px-4 py-2 rounded font-bold">Cancel</button>
                    </div>
                </form>

                <!-- Profile Picture Upload Form -->
                <form method="post" action="/upload-profile" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <label class="block mb-2 text-gray-400">Change Profile Picture:</label>
                    <input type="file" name="profile_image" id="profileImageInput" class="mb-3 text-white"> <!-- ✅ added id -->
                    <br>
                    <button class="bg-vermillion px-4 py-2 rounded font-bold">Upload</button>
                </form>

            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <?= view('components/footer', [
        'brandTitle' => 'Streetline Supply Co.',
        'tagline' => 'Skate gear for real riders.',
        'logo' => base_url('images/logo.png'),
    ]) ?>

    <!-- JS TOGGLE EDIT SECTION -->
    <script>
        const editBtn = document.getElementById('editBtn');
        const editSection = document.getElementById('editSection');
        const cancelBtn = document.getElementById('cancelBtn');

        editBtn.addEventListener('click', function() {
            editSection.classList.remove('hidden'); // show edit section
            editBtn.classList.add('hidden'); // hide edit button
        });

        cancelBtn.addEventListener('click', function() {
            editSection.classList.add('hidden'); // hide edit section
            editBtn.classList.remove('hidden'); // show edit button
        });
    </script>
    <script>
        const profileInput = document.getElementById('profileImageInput');
        const headerProfileImage = document.getElementById('headerProfileImage');

        if (profileInput && headerProfileImage) {
            profileInput.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (!file) return;

                const reader = new FileReader();
                reader.onload = function(e) {
                    headerProfileImage.src = e.target.result; // Update header icon instantly
                };
                reader.readAsDataURL(file);
            });
        }
    </script>

</body>

</html>