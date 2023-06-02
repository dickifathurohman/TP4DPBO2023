<?php
    include_once("conf.php");
    include_once("models/Member.class.php");

    class FormView{

        public function render($id_selected, $data){
            if($id_selected == -1){

                $option = null;

                foreach($data['grup'] as $val){
                    list($id, $nama) = $val;
                    $option .= "<option value='" . $id . "'>" . $nama . "</option>";
                }

                $form =
                '<form method="post" action="index.php">
                    <br><br>
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h1 class="text-white text-center">  Create New Member </h1>
                        </div><br>
        
                        <label> NAME: </label>
                        <input type="text" name="nama" class="form-control"> <br>
        
                        <label> EMAIL: </label>
                        <input type="text" name="email" class="form-control"> <br>
                    
                        <label> PHONE: </label>
                        <input type="text" name="phone" class="form-control"> <br>
        
                        <label> JOIN DATE: </label>
                        <input type="date" name="join_date" class="form-control"> <br>
        
                        <label for="grup_id">GROUP: </label>
                        <select class="custom-select form-control" name="grup_id">
                            <option value="" disabled selected hidden>Select Group</option>
                            "' . $option . '"
                        </select>
        
                        <button class="btn btn-success" type="submit" name="add"> Add </button><br>
                        <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
        
                    </div>
                </form>';
            }
            else{
                $option = null;

                $id_grup = 0;
                foreach ($data['member'] as $val) {
                    list($id, $name, $email, $phone, $join_date, $grup_id) = $val;
                    $id_grup = $grup_id;
                }

                foreach($data['grup'] as $val){
                    list($id, $nama) = $val;
                    if($id_grup == $id){
                        $option .= "<option value='" . $id . "' selected>" . $nama . "</option>";
                    }
                    else{
                        $option .= "<option value='" . $id . "'>" . $nama . "</option>";
                    }
                    
                }

                foreach ($data['member'] as $val) {
                    list($id, $name, $email, $phone, $join_date, $grup_id) = $val;
                    $form =
                    '<form method="post" action="index.php">
                        <br><br>
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h1 class="text-white text-center">  Create New Member </h1>
                            </div><br>
            
                            <input type="hidden" name="id" value="' . $id_selected . '">

                            <label> NAME: </label>
                            <input type="text" name="nama" class="form-control" value="' . $name . '"> <br>
            
                            <label> EMAIL: </label>
                            <input type="text" name="email" class="form-control" value="' . $email . '"> <br>
                        
                            <label> PHONE: </label>
                            <input type="text" name="phone" class="form-control" value="' . $phone . '"> <br>
            
                            <label> JOIN DATE: </label>
                            <input type="date" name="join_date" class="form-control" value="' . $join_date . '"> <br>
            
                            <label for="grup_id">GROUP: </label>
                            <select class="custom-select form-control" name="grup_id">
                                "' . $option . '"
                            </select>
            
                            <button class="btn btn-success" type="submit" name="edit"> Update </button><br>
                            <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>
            
                        </div>
                    </form>';
                }
            }

            $tpl = new Template("templates/form.html");
            $tpl->replace("FORM", $form);
            $tpl->write();
        }
    }