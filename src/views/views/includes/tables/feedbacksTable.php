<?php
require 'controllers/sql/feedback_queries.php';

use controllers\sql;

$get_feedback = new sql\feedback_queries();
$result = $get_feedback->get_feedbacks();
if (!$result) {
    echo "ERROR";
    die();
}
?>

<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-8"><h1 class="text-3xl font-bold mb-2">
        User Feedback
    </h1>
    <p class="text-lg text-gray-700">
        Here are all the feedback messages from users on our contact page.
    </p>
</div>


<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-8">
    <div
        class="grid grid-cols-1 md:grid-cols-2 sm:grid-cols-1 lg:grid-cols-3 gap-4">
        <?php foreach ($result as $item): ?>
            <div
                id="<?= $item['id'] ?>"
                class="border shadow-lg border-gray-400 rounded bg-white flex flex-col justify-between leading-normal">
                <div class="p-6 relative">
                    <div class="absolute top-0 right-0 mt-2 mr-2">
                        <button id="deleteButton" data-id="<?= $item['id'] ?>"
                                class="inline-flex justify-center w-full px-2 py-2 text-sm font-medium text-gray-700 hover:text-black focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M6.707 4.293a1 1 0 011.414 0L10 6.586l1.879-1.879a1 1 0 011.414 1.414l-2.293 2.293 2.293 2.293a1 1 0 01-1.414 1.414L10 9.414l-1.879 1.879a1 1 0 01-1.414-1.414L7.586 8l-1.879-1.879a1 1 0 010-1.414z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </button>
                    </div>
                    <div class="mb-8">
                        <p class="text-sm text-gray-600 flex items-center">
                            <svg class="fill-current text-gray-500 w-3 h-3 mx-2" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 20 20">
                                <path
                                    d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z">
                                </path>
                            </svg>
                            <?= $item['company_name'] ?>
                        </p>
                        <a href="" class="text-gray-900 font-bold text-md mb-2 hover:text-indigo-600 inline-block">
                            <?= $item['email'] ?></a>
                        <p class="text-gray-700 text-sm"><?= $item['message'] ?></p>
                    </div>
                    <div class="flex items-center">
                        <a
                            href="#"></a>
                        <div class="text-sm">
                            <divs href="#"
                                  class="text-gray-900 font-semibold leading-none hover:text-indigo-600"><?= $item['first_name'] . ' ' ?><?= $item['last_name'] ?></divs>
                            <p class="text-gray-600"><?= $item['date'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<!-- Confirmation Modal -->
<div id="confirmationModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden">
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-sm w-full">
        <h2 class="text-lg font-semibold mb-4">Are you sure you want to delete this card?</h2>
        <div class="flex justify-end">
            <button id="confirmDelete" class="bg-red-500 text-white px-4 py-2 rounded mr-2">Yes</button>
            <button id="cancelDelete" class="bg-gray-500 text-white px-4 py-2 rounded">No</button>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        let cardIdToDelete = null;
        // Attach click event listener to all delete buttons
        document.querySelectorAll('#deleteButton').forEach(button => {
            console.log('Button found: ', button);
            button.addEventListener('click', function () {
                console.log('Button clicked');

                // Get the ID of the card to delete
                cardIdToDelete = this.getAttribute('data-id');
                console.log('Card ID: ', cardIdToDelete); // Show the confirmation modal
                document.getElementById('confirmationModal').classList.remove('hidden');
            });
        });


        document.getElementById('cancelDelete').addEventListener('click', function () {
            // Hide the confirmation modal without deleting
            document.getElementById('confirmationModal').classList.add('hidden');
            cardIdToDelete = null; // Reset the card ID
        });
    });


</script>

