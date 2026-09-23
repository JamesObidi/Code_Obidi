import tkinter as tk
from tkinter import messagebox


def submit_student_form() -> None:
    name = name_var.get().strip()
    student_id = id_var.get().strip()
    student_class = class_var.get().strip()
    grade = grade_var.get().strip()

    if not name or not student_id:
        messagebox.showwarning("Missing information", "Please enter both student name and ID.")
        return

    message = (
        f"Student Name: {name}\n"
        f"Student ID: {student_id}\n"
        f"Class: {student_class}\n"
        f"Grade: {grade}"
    )

    messagebox.showinfo("Student Details", message)


root = tk.Tk()
root.title("Student Form")
root.geometry("380x260")
root.resizable(False, False)

name_var = tk.StringVar()
id_var = tk.StringVar()
class_var = tk.StringVar()
grade_var = tk.StringVar()

frame = tk.Frame(root, padx=16, pady=16)
frame.pack(fill="both", expand=True)

labels = ["Student Name:", "Student ID:", "Class:", "Grade:"]
variables = [name_var, id_var, class_var, grade_var]

for row, (label_text, variable) in enumerate(zip(labels, variables)):
    label = tk.Label(frame, text=label_text, anchor="w")
    label.grid(row=row, column=0, sticky="w", pady=6)
    entry = tk.Entry(frame, textvariable=variable, width=28)
    entry.grid(row=row, column=1, sticky="w", pady=6)

submit_button = tk.Button(frame, text="Submit", command=submit_student_form, width=12)
submit_button.grid(row=len(labels), column=0, columnspan=2, pady=16)

root.mainloop()