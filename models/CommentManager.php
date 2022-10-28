<?php

class CommentManager extends Model
{
    /**
     * Add comment function
     * @return void
     */
    public function addCommentAction()
    {
        return $this->addComment('comment');
    }

    /**
     * Retrieve all comments function
     * @param [type] $idPost
     * @return void
     */
    public function getCommentsPost($idPost)
    {
        return $this->getAllCommentsPost('comment', 'user', $idPost);
    }

    /**
     * Retrieve unpublished comments function
     * @return void
     */
    public function getCommentsNotActived()
    {
        return $this->getAllCommentsNotActived('comment', 'post');
    }

    /**
     * Delete comment function
     * @param [type] $id
     * @return void
     */
    public function deleteComment($id)
    {
        return $this->deleteCommentById('comment', $id);
    }

    /**
     * Validate comment function
     * @param [type] $id
     * @return void
     */
    public function validateComment($id)
    {
        return $this->validateCommentById('comment', $id);
    }

    /**
     * Add comment function
     * @param [type] $table
     * @return void
     */
    private function addComment($table)
    {   
        $this->getBdd();
        $newFields = array_map ('htmlspecialchars' , $_POST);
        $result = "Merci! votre commentaire est en attente d'approbation";

        $req = self::$bdd->prepare("INSERT INTO $table (id_user, id_post, content, status, dateCreated) VALUES (?, ?, ?, ?, ?)");
        $req->execute(array($newFields['id_user'], $newFields['id_post'], $newFields['comment'], 0, date("Y-m-d H:i:s")));
        $req->closeCursor();

        return $result;
    }

    /**
     * Retrieve all comments function
     * @param [type] $tableComment
     * @param [type] $tableUser
     * @param [type] $idPost
     * @return void
     */
    private function getAllCommentsPost($tableComment, $tableUser, $idPost)
    {
        
    }

    /**
     * Retrieve unpublished comments function
     * @param [type] $tableComment
     * @param [type] $tablePost
     * @return void
     */
    private function getAllCommentsNotActived($tableComment, $tablePost)
    {
        
    }

    /**
     * Delete comment function
     * @param [type] $table
     * @param [type] $id
     * @return void
     */
    private function deleteCommentById($table, $id)
    {
        
    }

    /**
     * Validate comment function
     * @param [type] $table
     * @param [type] $id
     * @return void
     */
    private function validateCommentById($table, $id)
    {
        
    }
}