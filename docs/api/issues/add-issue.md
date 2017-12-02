**Add Issue**
----
  Adds single issue with translation and returns json data with the issue id.

* **URL**

  `/api/issues/new`

* **Method:**

  `POST`

* **Data Params**

  **Required:**

  `issue=[string]` <br/>
  `translation=[string]` <br/>
  `lang=[string]`

* **Success Response:**

  * **Code:** 200 <br />
    **Content:** 
    ```
    { id: 12 }
    ```
 
* **Error Response:**

  * **Code:** 409 CONFLICT <br />
    **Content:**
    ```
    { message: "Issue already exists." }
    ```