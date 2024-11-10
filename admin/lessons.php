<?php

include "header.php";

?>  
        <link rel="stylesheet" href="css/lessons.css">
        <div class="main-content">
            <h1>Create and Delete Lesson</h1>
            <div class="box">
                <div class="add-exam">
                    <h2>Add Lesson</h2>
                    <form>
                    <label for="exam-category">Topic Name:</label>
                    <input type="text" id="exam-category" name="exam_category">

                    <label for="exam-time">Exam Time in Minutes:</label>
                    <input type="text" id="exam-time" name="exam_time">

                    <br><button type="submit">Add Lesson</button>
                    </form>
                </div>

                <div class="exam-categories">
                    <h2>Lessons</h2>
                    <table>
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>Topic</th>
                            <th>Contents</th>
                            <th>Actions</th>
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>PHP1</td>
                            <td>30</td>
                            <td><button>Edit</button> <button>Delete</button></td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</body>
</html>