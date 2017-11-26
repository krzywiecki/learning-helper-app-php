**Get Issue**
----
  Returns json data about a single issue.

* **URL**

  `/api/issues/:id`

* **Method:**

  `GET`
  
*  **URL Params**

   **Required:**
 
   `id=[integer]` <br/>
   `language=[string]`

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** 
    ```
    {
        id: 12,
        issue: 'responsible',
        translation: 'odpowiedzialny'
    }
    ```
 
* **Error Response:**

  * **Code:** 404 NOT FOUND <br />
    **Content:**
    ```
    { error: "Issue doesn't exist" }
    ```